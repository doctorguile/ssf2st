window.App = {
    Models: {},
    Views: {},
    Collections: {},
    Globals: {
        imageCache: [],
        imageCount: {"balrog": {"rh": 59, "srk": 88}, "blanka": {"rh": 53, "srk": 75}, "cammy": {"rh": 61, "srk": 87}, "chunli": {"rh": 63, "srk": 75}, "deejay": {"rh": 58, "srk": 90}, "dhalsim": {"rh": 57, "srk": 78}, "ehonda": {"rh": 67, "srk": 76}, "shoto": {"rh": 96, "srk": 80}, "feilong": {"rh": 60, "srk": 91}, "guile": {"rh": 72, "srk": 75}, "mbison": {"rh": 54, "srk": 84}, "sagat": {"rh": 50, "srk": 86}, "thawk": {"rh": 58, "srk": 87}, "vega": {"rh": 48, "srk": 96}, "zangief": {"rh": 53, "srk": 83}}
    },
    Utils: {
        imageURL: function (character, move, idx) {
            idx = sprintf('%04d', idx);
            return character + '/' + move + '/' + idx + '.png';
        },
        cacheImages: function (character) {
            var _cacheImages = function (move) {
                for (var x = 0; x < App.Globals.imageCount[character][move]; x++) {
                    var url = App.Utils.imageURL(character, move, x);
                    if (!App.Globals.imageCache[url]) {
                        App.Globals.imageCache[url] = new Image();
                        App.Globals.imageCache[url].src = url;
                    }
                }
            };
            _cacheImages('rh');
            _cacheImages('srk');
        }
    }
};

App.Models.Attacker = Backbone.Model.extend({
    defaults: {
        selected: null
    }
});

App.Models.Target = Backbone.Model.extend({
    defaults: {
        selected: null
    }
});

App.Models.Knockdown = Backbone.Model.extend({
    defaults: {
        selected: null
    }
});

App.Views.Attacker = Backbone.View.extend({
    el: '#attacker-container',
    events: {'click input': 'onclick'},
    onclick: function (evt) {
        this.model.set('selected', parseInt($(evt.currentTarget).val(), 10));
    }
});

App.Views.Target = Backbone.View.extend({
    el: '#target-container',
// these dont work
//    events: {
//        'change': 'onselect',
//        'change #target-character': 'onselect'
//    },
    onselect: function (evt) {
        this.model.set('selected', $(evt.currentTarget).val())
    },
    initialize: function () {
        // cannot bind using backbone events change for some reasons
        $('input[name="target-character"]', this.el).on('change', $.proxy(this.onselect, this));
    },
    drawFrame: function () {
        this.$el.html(this.template(this.model.toJSON()));
        return this;
    }
});

App.Views.Knockdown = Backbone.View.extend({
    el: '#knockdown-container',
    initialize: function () {
        // cannot bind using backbone events change for some reasons
        $('input[name="knockdown"]', this.el).on('change', $.proxy(this.onRadioChange, this));
    },
    onRadioChange: function (evt) {
        this.model.set('selected',$(evt.currentTarget).val());
    }
});

App.Views.Animation = Backbone.View.extend({
    el: '#animation-container',
    initialize: function () {
        var l = $("#left", this.el);
        var r = $("#right", this.el);
        l.unbind("mousedown").unbind("mouseup");
        r.unbind("mousedown").unbind("mouseup");
        l.mousedown($.proxy(this.fastBackward, this));
        r.mousedown($.proxy(this.fastForward, this));
        l.mouseup($.proxy(this.mouseup, this));
        r.mouseup($.proxy(this.mouseup, this));
        $('#jump', this.el).unbind("click").click($.proxy(this.onJump, this));
        $('#animate', this.el).unbind("click").click($.proxy(this.onAnimateClick, this));
        this.options.attackerModel.on('change', this.onChange, this);
        this.options.targetModel.on('change', this.onChange, this);
        this.options.knockdownModel.on('change', this.onChange, this);
        this.onChange();
    },
    onChange: function () {
        this.attackerJumpframe = this.options.attackerModel.get('selected');
        this.target = this.options.targetModel.get('selected');
        this.knockdown = this.options.knockdownModel.get('selected');
        this.render();
    },
    render: function () {
        this.length = App.Globals.imageCount[this.target][this.knockdown];
        App.Utils.cacheImages(this.target);
        this.direction = -1;
        this.mousedown = false;
        this.idx = this.attackerJumpframe;
        var color = "blue";
        $('#animation', this.el).attr('src', App.Utils.imageURL(this.target, this.knockdown, this.idx)).css("border", "6px " + color + " solid");
        return this;
    },
    drawFrame: function () {
        if (this.idx < 0 || this.idx >= this.length) {
            return;
        }
        var color = "black";
        if (this.idx == this.attackerJumpframe) {
            color = "blue";
        }
        $('#animation').attr('src', App.Utils.imageURL(this.target, this.knockdown, this.idx)).css("border", "6px " + color + " solid");
    },
    moveFrames: function () {
        if (this.idx + this.direction < 0 || this.idx + this.direction >= this.length) {
            return;
        }
        this.idx += this.direction;
        this.drawFrame();
        if (this.mousedown) {
            setTimeout($.proxy(this.moveFrames, this), 100);
        }
    },
    onAnimateClick: function () {
        $('button').attr("disabled", true);
        this.idx = this.length - 1;
        this.animate();
    },
    onJump: function () {
        this.idx = this.attackerJumpframe;
        this.drawFrame();
    },
    fastBackward: function () {
        this.direction = 1;
        this.mousedown = true;
        setTimeout($.proxy(this.moveFrames, this), 100);
    },
    fastForward: function () {
        this.direction = -1;
        this.mousedown = true;
        setTimeout($.proxy(this.moveFrames, this), 100);
    },
    mouseup: function () {
        this.mousedown = false;
    },
    animate: function () {
        this.direction = -1;
        var delay = 100;
        if (this.idx == this.attackerJumpframe) {
            delay = 1000;
        }
        this.drawFrame();
        if (this.idx + this.direction < 0 || this.idx + this.direction >= this.length) {
            $('button').attr("disabled", false);
            return;
        }
        this.idx += this.direction;
        setTimeout($.proxy(this.animate, this), delay);
    }
});

$(function () {
    App.Globals.attackerModel = new App.Models.Attacker({selected: 41});
    App.Globals.targetModel = new App.Models.Target({selected: 'balrog'});
    App.Globals.knockdownModel = new App.Models.Knockdown({selected: 'srk'});
    App.Globals.attackerView = new App.Views.Attacker({model: App.Globals.attackerModel});
    App.Globals.targetView = new App.Views.Target({model: App.Globals.targetModel});
    App.Globals.knockdownView = new App.Views.Knockdown({model: App.Globals.knockdownModel});
    App.Globals.animationView = new App.Views.Animation({attackerModel: App.Globals.attackerModel, targetModel: App.Globals.targetModel, knockdownModel: App.Globals.knockdownModel});
});

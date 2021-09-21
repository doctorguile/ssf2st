document
    .getElementById('zoomin')
    .addEventListener('click', function() {
        if (document.getElementById('canvas-zone').classList.contains('zoomedIn')) {
            document
                .getElementById('canvas-zone')
                .classList.remove('zoomedIn')
                return ''
        }
        //console.log(document.getElementById('canvas-zone').classList.contains('zoomedIn'));
        document
            .getElementById('canvas-zone')
            .classList.add('zoomedIn')
    })


const attackIndexes = document.querySelectorAll('li a');
const attackMoves = document.querySelectorAll('.heading h2');

document.addEventListener('DOMContentLoaded', function() {
        for (let attack of attackIndexes) {
            let newValue = attack.innerText
            .replace(/_/g, ' ')
            attack.innerText = newValue.charAt(0).toUpperCase() + newValue.slice(1)
        };
        for (let attack of attackMoves) {
            attack.innerText = attack.charAt(0).toUpperCase() + attack.slice(1)
        }
})
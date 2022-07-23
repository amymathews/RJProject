const fill = document.querySelector('.fill');
const empties = document.querySelectorAll('.empty');

//Fill Listeners

fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd);

//Loop through empties and call drag events
for(const empty of empties) {
    empty.addEventListener('dragover', dragOver);
    empty.addEventListener('dragenter', dragEnter);
    empty.addEventListener('dragleave', dragLeave);
    empty.addEventListener('drop', dragDrop);
}

//Drag Functions
function dragStart() {
    console.log("HERE")
    this.className += ' hold';
    setTimeout(() => this.className = 'invisible', 0);
}

function dragEnd() {
    console.log("HERE2")

    // when we let go it still exists
    this.className = 'fill';

}
function dragOver(e) {
    console.log("HERE3")

    e.preventDefault();
}

function dragEnter(e) {
    console.log("HERE4")

    e.preventDefault();
    this.className += ' hovered';
}
function dragLeave() {
    this.className = 'empty';
}

function dragDrop() {
    this.className = 'empty';
    this.append(fill);
}


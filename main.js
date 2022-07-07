const notesContainer = document.getElementById("app");
const addNoteButton = notesContainer.querySelector(".add-note");

getNotes().forEach(note => {
    const noteElement = createNoteElement(note.id, note.content);
    notesContainer.insertBefore(noteElement, addNoteButton);
});

function getNotes(){
    return JSON.parse(localStorage.getItem("stickynotes-notes") || "[]");
}

function saveNotes(notes) {

    localStorage.setItem("stickynotes-notes", JSON.stringify(notes));
}

function createNoteElement(id, content) {

    const element = document.createElement("textarea");

    element.classList.add("note");
    element.value = content;
    element.placeholder = "Empty Sticky Note";

    element.addEventListener("change", () => {
        updateNote(id, element.value);

    });

    element.addEventListener("dblclick", () => {
        const doDelete = confirm ("Are you sure you wish to delete this sticky note? ");
        if(doDelete) {
            deleteNote(id, element);
        }
    });
    return element;

}

function addNote() {
const existingNotes = getNotes();
const noteObject = {
    id: Math.floor(Math.random()*1),
    content: ""
 };
 const noteElement = createNoteElement(noteObject.id, noteObject.content);
 notesContainer.insertBefore(noteElement, addNoteButton);

}

function updateNote(id, newContent){

    console.log("Updating Note ...");
    console.log(id, newContent);


}
function deleteNote(id,element){
    console.log("Deleting Note...");
    console.log(id);

}
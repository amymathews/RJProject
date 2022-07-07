const notesContainer = document.getElementById("app");
const notesContainer2 = document.getElementById("app2");
const notesContainer3 = document.getElementById("app3");


const addNoteButton = notesContainer.querySelector(".add-note");

getNotes().forEach(note => {
    const noteElement = createNoteElement(note.app, note.content);
    notesContainer.insertBefore(noteElement, addNoteButton);
});

getNotes().forEach(note => {
    const noteElement = createNoteElement(note.app2, note.content);
    notesContainer2.insertBefore(noteElement, addNoteButton);
});

getNotes().forEach(note => {
    const noteElement = createNoteElement(note.app3, note.content);
    notesContainer3.insertBefore(noteElement, addNoteButton);
});
addNoteButton.addEventListener("click", () => addNote());

function getNotes(){
    return JSON.parse(localStorage.getItem("stickynotes-notes") || "[]");
}

function saveNotes(notes) {

    localStorage.setItem("stickynotes-notes", JSON.stringify(notes));
}

function createNoteElement(app, content) {

    const element = document.createElement("textarea");

    element.classList.add("note");
    element.value = content;
    element.placeholder = "Empty Sticky Note";

    element.addEventListener("change", () => {
        updateNote(app, element.value);

    });

    element.addEventListener("dblclick", () => {
        const doDelete = confirm ("Are you sure you wish to delete this sticky note? ");
        if(doDelete) {
            deleteNote(app, element);
        }
    });
    return element;

}
function createNoteElement(app2, content) {

    const element = document.createElement("textarea");

    element.classList.add("note");
    element.value = content;
    element.placeholder = "Empty Sticky Note";

    element.addEventListener("change", () => {
        updateNote(app2, element.value);

    });

    element.addEventListener("dblclick", () => {
        const doDelete = confirm ("Are you sure you wish to delete this sticky note? ");
        if(doDelete) {
            deleteNote(app2, element);
        }
    });
    return element;

}

function createNoteElement(app3, content) {

    const element = document.createElement("textarea");

    element.classList.add("note");
    element.value = content;
    element.placeholder = "Empty Sticky Note";

    element.addEventListener("change", () => {
        updateNote(app3, element.value);

    });

    element.addEventListener("dblclick", () => {
        const doDelete = confirm ("Are you sure you wish to delete this sticky note? ");
        if(doDelete) {
            deleteNote(app3, element);
        }
    });
    return element;

}

function addNote() {
const notes = getNotes();
const noteObject = {
    app: Math.floor(Math.random()*1),
    content: ""
 };
 const noteElement = createNoteElement(noteObject.app, noteObject.content);
 notesContainer.insertBefore(noteElement, addNoteButton);

 notes.push(noteObject);
 saveNotes(notes);
}

function addNote() {
    const notes = getNotes();
    const noteObject = {
        app2: Math.floor(Math.random()*1),
        content: ""
     };
     const noteElement = createNoteElement(noteObject.app2, noteObject.content);
     notesContainer2.insertBefore(noteElement, addNoteButton);
    
     notes.push(noteObject);
     saveNotes(notes);
    }

    function addNote() {
        const notes = getNotes();
        const noteObject = {
            app3: Math.floor(Math.random()*1),
            content: ""
         };
         const noteElement = createNoteElement(noteObject.app3, noteObject.content);
         notesContainer3.insertBefore(noteElement, addNoteButton);
        
         notes.push(noteObject);
         saveNotes(notes);
        }

function updateNote(app, newContent){

   const notes = getNotes();
   const targetNote = notes.filter(note => note.app == app)[0];

   targetNote.content = newContent;
   saveNotes(notes);

}
function updateNote(app2, newContent){

    const notes = getNotes();
    const targetNote = notes.filter(note => note.app2 == app2)[0];
 
    targetNote.content = newContent;
    saveNotes(notes);
 
 }
 function updateNote(id, newContent){

    const notes = getNotes();
    const targetNote = notes.filter(note => note.app3 == app3)[0];
 
    targetNote.content = newContent;
    saveNotes(notes);
 
 }
function deleteNote(app,element){
    const notes = getNotes().filter(note => note.app != app);
    saveNotes(notes);
    notesContainer.removeChild(element);
}
function deleteNote(app2,element){
    const notes = getNotes().filter(note => note.app2 != app2);
    saveNotes(notes);
    notesContainer.removeChild(element);
}
function deleteNote(app3,element){
    const notes = getNotes().filter(note => note.app3 != app3);
    saveNotes(notes);
    notesContainer.removeChild(element);
}
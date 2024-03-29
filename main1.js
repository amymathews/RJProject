const notesContainer = document.getElementById("app");
var addNoteButton = notesContainer.querySelector(".add-note");

var buttonClickedid;
var buttonClickedClass = document.getElementsByClassName;
getNotes().forEach((note) => {
const noteElement = createNoteElement(note.id, note.content);
notesContainer.insertBefore(noteElement, addNoteButton);
});

//addNoteButton.addEventListener("click", () => addNote());

function getNotes() {
return JSON.parse(localStorage.getItem("stickynotes-notes") || "[]");
}

function saveNotes(notes) {
localStorage.setItem("stickynotes-notes", JSON.stringify(notes));
}

// take the class name as well. 
function createNoteElement(id, content) {
const element = document.createElement("textarea");

element.classList.add("note");
element.value = content;
element.placeholder = "Empty Sticky Note";

element.addEventListener("change", () => {
updateNote(id, element.value);
});

element.addEventListener("dblclick", () => {
const doDelete = confirm(
"Are you sure you wish to delete this sticky note?"
);

if (doDelete) {
deleteNote(id, element);
}
});

return element;
}

//add the class to be able to specify the note to know the parent. 
//to specify the note to knwo the class of the parent. 
 function button_click(clicked_id)
  {
        this.buttonClickedid = clicked_id;
        this.addNote();
  }

function addNote() {
      const notes = getNotes();
      const noteObject = {
      id: Math.floor(Math.random() * 100000),
      content: ""
      };

      const noteElement = createNoteElement(noteObject.id, noteObject.content);
      addNoteButton =  document.getElementById(buttonClickedid);

      notesContainer.insertBefore(noteElement, addNoteButton);

      notes.push(noteObject);
      saveNotes(notes);
}

function updateNote(id, newContent) {
const notes = getNotes();
const targetNote = notes.filter((note) => note.id == id)[0];

targetNote.content = newContent;
saveNotes(notes);
}

function deleteNote(id, element) {
const notes = getNotes().filter((note) => note.id != id);

saveNotes(notes);
notesContainer.removeChild(element);
}
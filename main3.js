const notesContainer3 = document.getElementById("app3");
const addNoteButton3 = notesContainer3.querySelector(".add-note3");

getNotes().forEach((note) => {
  const noteElement = createNoteElement(note.id, note.content);
  notesContainer3.insertBefore(noteElement, addNoteButton3);
});

addNoteButton3.addEventListener("click", () => addNote());

function getNotes() {
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
    const doDelete = confirm(
      "Are you sure you wish to delete this sticky note?"
    );

    if (doDelete) {
      deleteNote(id, element);
    }
  });

  return element;
}

function addNote() {
  const notes3 = getNotes();
  const noteObject = {
    id: Math.floor(Math.random() * 100000),
    content: ""
  };

  const noteElement = createNoteElement(noteObject.id, noteObject.content);
  notesContainer3
.insertBefore(noteElement, addNoteButton3);

  notes3.push(noteObject);
  saveNotes(notes3);
}

function updateNote(id, newContent) {
  const notes3 = getNotes();
  const targetNote = notes3.filter((note) => note.id == id)[0];

  targetNote.content = newContent;
  saveNotes(notes3);
}

function deleteNote(id, element) {
  const notes3 = getNotes().filter((note) => note.id != id);

  saveNotes(notes3);
  notesContainer3
.removeChild(element);
}
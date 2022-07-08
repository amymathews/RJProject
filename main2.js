const notesContainer2 = document.getElementById("app2");
const addNoteButton2 = notesContainer2.querySelector(".add-note2");

getNotes().forEach((note) => {
  const noteElement = createNoteElement(note.id, note.content);
  notesContainer2.insertBefore(noteElement, addNoteButton2
);
});

addNoteButton2.addEventListener("click", () => addNote());

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
  const notes2 = getNotes();
  const noteObject = {
    id: Math.floor(Math.random() * 100000),
    content: ""
  };

  const noteElement = createNoteElement(noteObject.id, noteObject.content);
  notesContainer2.insertBefore(noteElement, addNoteButton2
);

  notes2.push(noteObject);
  saveNotes(notes2);
}

function updateNote(id, newContent) {
  const notes2 = getNotes();
  const targetNote = notes2.filter((note) => note.id == id)[0];

  targetNote.content = newContent;
  saveNotes(notes2);
}

function deleteNote(id, element) {
  const notes2 = getNotes().filter((note) => note.id != id);

  saveNotes(notes);
  notesContainer2.removeChild(element);
}
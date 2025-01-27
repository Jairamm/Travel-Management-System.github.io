const searchInput = document.getElementById("search");

const placeholderTexts = [
  "Search for flight Services...",
  "Check Distance Between cities...",
  "Find Weather Information...",
  "For Any Query Contact Our Teams...",
  "Explore Any Traveling Services "
];

let currentTextIndex = 0; // Tracks the current placeholder text in the array
let charIndex = 0; // Tracks the current character index in the placeholder text
let typing = true; // Flag to control typing/clearing process

function typePlaceholder() {
  const currentPlaceholder = placeholderTexts[currentTextIndex];
  searchInput.setAttribute(
    "placeholder",
    currentPlaceholder.slice(0, charIndex + 1)
  );
  charIndex++;

  if (charIndex === currentPlaceholder.length) {
    typing = false; // Switch to clearing after finishing typing
    setTimeout(() => clearPlaceholder(), 1000); // Delay before clearing starts
  } else {
    setTimeout(typePlaceholder, 150); // Type next character
  }
}

function clearPlaceholder() {
  const currentPlaceholder = placeholderTexts[currentTextIndex];
  searchInput.setAttribute(
    "placeholder",
    currentPlaceholder.slice(0, charIndex)
  );
  charIndex--;

  if (charIndex < 0) {
    currentTextIndex = (currentTextIndex + 1) % placeholderTexts.length; // Move to the next text
    typing = true; // Switch to typing again
    setTimeout(() => typePlaceholder(), 500); // Delay before typing starts again
  } else {
    setTimeout(clearPlaceholder, 100); // Clear next character
  }
}

typePlaceholder();

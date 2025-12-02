function unmapSourceMap(sm) {
    let output = "=== Unmapped Source Files ===\n\n";

    if (!sm.sourcesContent) {
        return "No sourcesContent found in this sourcemap!";
    }

    sm.sources.forEach((src, idx) => {
        output += `\n--- ${src} ---\n`;
        output += sm.sourcesContent[idx] || "(empty)";
        output += "\n\n";
    });

    return output;
}

// Fetch from URL
async function loadFromURL() {
    let url = document.getElementById("sourcemapUrl").value.trim();
    let output = document.getElementById("output");

    if (!url) return alert("Enter a .map URL!");

    try {
        let res = await fetch(url);
        let json = await res.json();
        output.textContent = unmapSourceMap(json);
    } catch (e) {
        output.textContent = "❌ Failed to fetch. Maybe CORS blocked it.\n\n" + e;
    }
}

// Load from pasted JSON
function loadFromText() {
    let text = document.getElementById("sourcemapText").value.trim();
    let output = document.getElementById("output");

    if (!text) return alert("Paste source map JSON!");

    try {
        let json = JSON.parse(text);
        output.textContent = unmapSourceMap(json);
    } catch (e) {
        output.textContent = "❌ Invalid JSON.\n" + e;
    }
}

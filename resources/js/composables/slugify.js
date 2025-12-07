export function slugify(text) {
    if (!text) return ''
    
    return text
        .toString()                      // Convert to string
        .toLowerCase()                   // Convert to lowercase
        .trim()                          // Remove whitespace from both ends
        .replace(/\s+/g, '-')           // Replace spaces with -
        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars except -
        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        .replace(/^-+/, '')             // Trim - from start
        .replace(/-+$/, '')             // Trim - from end
}
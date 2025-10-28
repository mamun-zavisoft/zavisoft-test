let startImpl = () => { };
let doneImpl = () => { };
let pending = 0;
let hasStarted = false; 
let lastStart = 0; 
let finishTimer = 0; 
const MIN_VISIBLE_MS = 1000; 

export function registerTopLoader(api) {
    if (!api) return;
    startImpl = typeof api.start === "function" ? api.start : startImpl;
    doneImpl = typeof api.done === "function" ? api.done : doneImpl;
}

function begin() {
    if (pending === 0 && !hasStarted) {
        if (finishTimer) {
            clearTimeout(finishTimer);
            finishTimer = 0;
        }
        hasStarted = true;
        lastStart = Date.now();
        startImpl();
    }
    pending++;
}

function finish() {
    if (pending === 0) return;
    pending--;
    if (pending === 0) {
        const elapsed = Date.now() - lastStart;
        const remaining = Math.max(0, MIN_VISIBLE_MS - elapsed);
        const finalize = () => {
            finishTimer = 0;
            hasStarted = false;
            lastStart = 0;
            doneImpl(); 
        };

        if (remaining > 0) {
            finishTimer = setTimeout(finalize, remaining);
        } else {
            finalize();
        }
    }
}

export function useTopLoader() {
    return {
        start: begin,
        done: finish,
    };
}

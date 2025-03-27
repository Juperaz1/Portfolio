document.addEventListener("mousemove", (event) => {
    let x = (window.innerWidth - event.pageX) / 100;
    let y = (window.innerHeight - event.pageY) / 100;
    document.getElementById("layer1").style.transform = `translate(${x}px, ${y}px)`;
    document.getElementById("layer2").style.transform = `translate(${-x}px, ${-y}px)`;
});

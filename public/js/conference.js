let topics = document.querySelector(".topics");
topics.onclick = (e) => {
    if (e.target.tagName !== "H4")
        return;
    let topic = e.target.parentElement.lastChild;
    topic.classList.toggle("toggle_topic");
};

console.log(document.getElementById("test").innerText);

tags = document.querySelector(".navbar-menu").children;
for (i=0; i < tags.length; i++){
    tags[i].addEventListener('click', function(event){
    alert(event.target.innerText);
    });
}

document.querySelectorAll(".title").forEach((abc) => {
    abc.onclick = function () {
        this.innerHTML = `
        <h3>
        <a href="#">This is by Js</a>
        <p>This is assigned Dynamicaly</p>
        </h3>
        `;
        this.style.color = "Yellow"
        this.style.backgroundColor = "#000000";
        this.style.borderRadius = "10px";
        this.style.padding = "20px"

        avatar = document.getElementById("Avatar");
        avatar.src =
          "https://neurosciencenews.com/files/2023/05/ai-trust-human-neurosinecce.jpg";
    };
});
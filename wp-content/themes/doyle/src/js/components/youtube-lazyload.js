// Youtube embeded Lazy Load on click
setTimeout(function () {
	let youtube = document.querySelectorAll(".youtube");

	for (let i = 0; i < youtube.length; i++) {
	  // Thumbnail image source.
	  let source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/0.jpg";

	  // Load the image asynchronously
	  let image = new Image();
	  image.loading="lazy";
	  image.src = source;
	  image.addEventListener("load", function () {
		youtube[i].appendChild(image);
	  }(i));

	  // Play video on click
	  youtube[i].addEventListener("click", function () {
		let iframe = document.createElement("iframe");

		iframe.setAttribute("frameborder", "0");
		iframe.setAttribute("allowfullscreen", "");
		iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=1&autoplay=1");

		this.innerHTML = "";
		this.appendChild(iframe);
	  });
	}
  }, 2000);
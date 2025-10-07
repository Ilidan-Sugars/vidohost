document.addEventListener("DOMContentLoaded", function () {
    const loading = document.getElementById("video-loading");
    const select = document.getElementById("floatingSelect");
    const iframes = document.querySelectorAll(".iframe");

    if (loading) loading.style.display = "none";
    if (iframes.length) iframes[0].classList.add("d-block");
    console.log(1111);

    if (select) {
        select.addEventListener("change", function () {
            const value = select.value;
            iframes.forEach((iframe) => {
                if (iframe.id === "iframe-" + value) {
                    iframe.classList.remove("d-none");
                    iframe.classList.add("d-block");
                } else {
                    iframe.classList.remove("d-block");
                    iframe.classList.add("d-none");
                }
            });
        });
    }
});

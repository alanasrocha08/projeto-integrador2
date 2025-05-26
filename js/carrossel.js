export function carrossel() {
  const containerCard = document.querySelector(".container-card");
  const btnPrev = document.querySelector(".slider-btn.prev");
  const btnNext = document.querySelector(".slider-btn.next");

  const scrollAmount = 355;

  btnPrev.addEventListener("click", () => {
    containerCard.scrollBy({
      left: -scrollAmount,
      behavior: "smooth",
    });
  });

  btnNext.addEventListener("click", () => {
    containerCard.scrollBy({
      left: scrollAmount,
      behavior: "smooth",
    });
  });
}

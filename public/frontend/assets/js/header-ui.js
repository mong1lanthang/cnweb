// lay phan tu ve
let tagsHTML = document.getElementsByClassName("tag-navbar-super");
let tagContentForeign = document.querySelector(".foreign");
let tagContentDomestic = document.querySelector(".domestic");
let tagContentHighClass = document.querySelector(".high-class");
for (let tag of tagsHTML) {
  tag.addEventListener("mouseover", () => {
    console.log(tag);

    let tagId = tag.getAttribute("id");
    console.log(tagId);

    if (tagId === "tag-foreign") {
      tagContentDomestic.classList.add("d-none");
      tagContentHighClass.classList.add("d-none");
      tagContentForeign.classList.remove("d-none");
    } else if (tagId === "tag-domestic") {
      tagContentDomestic.classList.remove("d-none");
      tagContentHighClass.classList.add("d-none");
      tagContentForeign.classList.add("d-none");
    } else {
      tagContentDomestic.classList.add("d-none");
      tagContentHighClass.classList.remove("d-none");
      tagContentForeign.classList.add("d-none");
    }
  });
}

document
  .getElementById("foreign-mobile")
  .addEventListener("click", function () {
    const foreignMenu = document.querySelector(".foreign-mobile");
    foreignMenu.classList.toggle("show");
  });

document
  .getElementById("domestic-mobile")
  .addEventListener("click", function () {
    const domesticMenu = document.querySelector(".domestic-mobile");
    domesticMenu.classList.toggle("show");
  });

document
  .getElementById("luxurytravel-mobile")
  .addEventListener("click", function () {
    const luxurytravelMenu = document.querySelector(".luxurytravel-mobile");
    luxurytravelMenu.classList.toggle("show");
  });

document
  .getElementById("partner-mobile")
  .addEventListener("click", function () {
    const partnerMenu = document.querySelector(".partner-mobile");
    partnerMenu.classList.toggle("show");
  });

document.getElementById("menu-mobile").addEventListener("click", function () {
  const listItemMobile = document.querySelector(".list-item-mobile");
  listItemMobile.classList.toggle("show"); // Thêm hoặc xóa class show
});

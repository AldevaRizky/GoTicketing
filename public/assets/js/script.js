// document.addEventListener("DOMContentLoaded", () => {
//     const navLinks = document.querySelectorAll(".nav-link");
//     const highlight = document.querySelector(".highlight");
  
//     const moveHighlight = (element) => {
//       const rect = element.getBoundingClientRect();
//       const parentRect =
//         element.parentElement.parentElement.getBoundingClientRect();
//       highlight.style.width = ${rect.width}px;
//       highlight.style.transform = translateX(${rect.left - parentRect.left}px);
//     };
  
//     // Atur posisi highlight saat pertama kali
//     const activeLink = document.querySelector(".nav-link.active");
//     if (activeLink) moveHighlight(activeLink);
  
//     // Tambahkan event listener pada setiap link
//     navLinks.forEach((link) => {
//       link.addEventListener("click", (e) => {
//         e.preventDefault();
  
//         // Hapus kelas 'active' dari semua link
//         navLinks.forEach((nav) => nav.classList.remove("active"));
  
//         // Tambahkan kelas 'active' ke link yang diklik
//         link.classList.add("active");
  
//         // Pindahkan highlight
//         moveHighlight(link);
//       });
//     });
  
//     // Atur ulang posisi highlight saat window di-resize
//     window.addEventListener("resize", () => {
//       const activeLink = document.querySelector(".nav-link.active");
//       if (activeLink) moveHighlight(activeLink);
//     });
//   });
  
//   document.addEventListener("DOMContentLoaded"),
//     function () {
//       const menuIcon = document.getElementById("menu-icon");
//       const navbar = document.querySelector(".navbar");
//     };
//   menuIcon.addEventListener("click", function () {
//     navbar.classList.toggle("active");
//   });
  
//   // Menutup navbar saat link diklik (opsional)
//   navbar.addEventListener("click", function (event) {
//     if (event.target.tagName === "A") {
//       navbar.classList.remove("active");
//     }
//   });
  
//   //----------------------------------------------------------------

document.getElementById("search-button").addEventListener("click", function () {
    const origin = document.getElementById("origin").value;
    const destination = document.getElementById("destination").value;
    const departureDate = document.getElementById("departure-date").value;
    const returnDate = document.getElementById("return-date").value;
  
    if (!origin || !destination || !departureDate) {
      alert("Harap lengkapi semua kolom pencarian!");
      return;
    }
  
    alert(
      `Pencarian: Dari ${origin} ke ${destination} pada ${departureDate}` +
        (returnDate ? `, Pulang: ${returnDate}` : "")
    );
  
    // Tambahkan logika untuk memuat data hasil pencarian
  });
  
  document.getElementById("change-search").addEventListener("click", function () {
    alert("Ganti pencarian form.");
    // Logika untuk membuka form pencarian kembali
  });
  
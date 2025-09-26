// Mengimpor semua library yang dibutuhkan
import "./bootstrap";
import "flowbite"; // Penting untuk fungsionalitas modal gambar
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// Mendaftarkan plugin ScrollTrigger ke GSAP
gsap.registerPlugin(ScrollTrigger);

// Menjalankan semua skrip setelah halaman dimuat sepenuhnya
document.addEventListener("DOMContentLoaded", function () {
    // ==========================================================
    // GSAP ANIMATIONS (Untuk Desain "Kinetic Grid")
    // ==========================================================

    // Navigasi Sticky: Mengaktifkan link di kiri saat section di kanan di-scroll
    const sections = document.querySelectorAll(".content-section");
    const navLinks = document.querySelectorAll(".nav-link");

    sections.forEach((section, index) => {
        ScrollTrigger.create({
            trigger: section,
            start: "top center",
            end: "bottom center",
            onToggle: (self) => {
                if (self.isActive) {
                    navLinks.forEach((link) =>
                        link.classList.remove("is-active")
                    );
                    // Pastikan link navigasi ada sebelum menambahkan kelas
                    if (navLinks[index]) {
                        navLinks[index].classList.add("is-active");
                    }
                }
            },
        });
    });

    // Animasi Judul (muncul dari bawah)
    const headlines = gsap.utils.toArray(".headline");
    headlines.forEach((headline) => {
        gsap.fromTo(
            headline,
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: headline,
                    start: "top 80%",
                },
            }
        );
    });

    // Animasi Kartu Proyek (muncul dari bawah secara berurutan)
    const projectCards = gsap.utils.toArray(".project-card");
    projectCards.forEach((card, index) => {
        gsap.fromTo(
            card,
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                delay: index * 0.1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: card,
                    start: "top 85%",
                },
            }
        );
    });
});

// ==========================================================
// FORMULIR KONTAK DENGAN AJAX (FORMPSREE)
// ==========================================================
const form = document.getElementById("contact-form");
const notificationToast = document.getElementById("notification-toast");
const notificationMessage = document.getElementById("notification-message");

async function handleSubmit(event) {
    event.preventDefault();
    const data = new FormData(event.target);

    try {
        const response = await fetch(form.action, {
            method: form.method,
            body: data,
            headers: { Accept: "application/json" },
        });

        if (response.ok) {
            showToast("Pesan berhasil terkirim!", "success");
            form.reset();
        } else {
            showToast("Oops! Terjadi masalah saat mengirim pesan.", "error");
        }
    } catch (error) {
        showToast("Oops! Terjadi masalah koneksi.", "error");
    }
}

function showToast(message, type) {
    notificationMessage.textContent = message;
    notificationToast.classList.remove("bg-accent-lime", "bg-red-500");

    if (type === "success") {
        notificationToast.classList.add("bg-accent-lime");
    } else {
        // Anda bisa definisikan warna error di tailwind.config.js jika perlu
        notificationToast.classList.add("bg-red-500");
    }

    notificationToast.classList.remove("hidden");

    setTimeout(() => {
        notificationToast.classList.add("hidden");
    }, 3000);
}

// Pastikan elemen-elemen ada sebelum menambahkan event listener
if (form && notificationToast && notificationMessage) {
    form.addEventListener("submit", handleSubmit);
}

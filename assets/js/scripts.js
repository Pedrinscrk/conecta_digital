// Scroll para a seção
function scrollToContent() {
    document.getElementById("services-overview").scrollIntoView({ behavior: "smooth" });
}

// Canvas Hero Background (Efeito Dinâmico)
const canvas = document.getElementById("hero-canvas");
const ctx = canvas.getContext("2d");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const particles = [];
const particleCount = 150;

class Particle {
    constructor(x, y, size, color) {
        this.x = x;
        this.y = y;
        this.size = size;
        this.color = color;
        this.dx = Math.random() * 2 - 1;
        this.dy = Math.random() * 2 - 1;
    }

    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fillStyle = this.color;
        ctx.fill();
    }

    update() {
        this.x += this.dx;
        this.y += this.dy;

        if (this.x < 0 || this.x > canvas.width) this.dx *= -1;
        if (this.y < 0 || this.y > canvas.height) this.dy *= -1;

        this.draw();
    }
}

function initParticles() {
    for (let i = 0; i < particleCount; i++) {
        const size = Math.random() * 3 + 1;
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;
        particles.push(new Particle(x, y, size, "#00e5ff"));
    }
}

function animateParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particles.forEach((particle) => particle.update());
    requestAnimationFrame(animateParticles);
}

initParticles();
animateParticles();

// Hover Preview
function showPreview(type) {
    document.getElementById(`preview-${type}`).style.opacity = "1";
    document.getElementById(`preview-${type}`).style.transform = "scale(1.1)";
}


function hidePreview() {
    const previews = document.querySelectorAll(".preview");
    previews.forEach((preview) => {
        preview.style.opacity = "0";
        preview.style.transform = "scale(1)";
    });
}
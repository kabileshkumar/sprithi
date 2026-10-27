const nav = document.getElementById('nav');
window.addEventListener('scroll', () => nav.classList.toggle('stuck', scrollY > 10), { passive: true });
document.getElementById('burger').onclick = () => document.getElementById('links').classList.toggle('open');

const io = new IntersectionObserver(es => es.forEach(e => {
    if (!e.isIntersecting) return;
    e.target.classList.add('in');
    if (e.target.dataset.count) count(e.target);
    io.unobserve(e.target);
}), { threshold: .2 });
document.querySelectorAll('.rv, [data-count]').forEach(el => io.observe(el));

function count(el) {
    const end = +el.dataset.count, suf = el.dataset.suffix || '', t0 = performance.now();
    (function tick(t) {
        const p = Math.min((t - t0) / 1400, 1);
        el.textContent = Math.round(end * (1 - Math.pow(1 - p, 3))) + suf;
        if (p < 1) requestAnimationFrame(tick);
    })(t0);
}

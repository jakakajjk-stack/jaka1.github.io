document.addEventListener('DOMContentLoaded', () => {
    const waNumber = '6281234567890'; // Ganti dengan nomor WhatsApp Anda

    // Ambil semua tombol 'Pesan'
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const productName = event.target.getAttribute('data-product');
            
            // Format pesan yang akan dikirim ke WhatsApp
            const message = `Halo, saya ingin memesan Serabi ${productName}. Tolong informasikan cara pemesanannya. Terima kasih.`;
            
            // Encode pesan agar aman untuk URL
            const encodedMessage = encodeURIComponent(message);
            
            // Buat link WhatsApp
            const waLink = `https://wa.me/${waNumber}?text=${encodedMessage}`;
            
            // Arahkan pengguna ke link WhatsApp
            window.open(waLink, '_blank');

            alert(`Anda akan diarahkan ke WhatsApp untuk memesan Serabi ${productName}!`);
        });
    });
});
// Configuração customizada do Tailwind para usar a paleta de cores do seu login
tailwind.config = {
    theme: {
        extend: {
            colors: {
                'primary': '#FF4500', // Laranja Vívido
                'dark-bg': '#000000', // Fundo Preto
                'dark-card': '#1e1e1e', // Fundo do Card Escuro
                'dark-secondary': '#2a2a2a', // Cor para inputs/hover
                'light-text': '#f5f5f5', // Cor do texto
            },
            fontFamily: {
                'title': ['Playfair Display', 'serif'],
                'body': ['Roboto', 'sans-serif'],
            },
        }
    }
}
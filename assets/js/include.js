class Navbar extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
                 
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">ระบบเบิกเซทและอุปกรณ์จ่ายกลาง</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        
        `;
    }
}
class Cssplugins extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">    
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/font/bootstrap-icons.css">
        `;
    }
}

// class Jsplugins extends HTMLElement {
//     constructor(){
//         this.innerHTML = `
//         <script src="../../assets/js/jquery-3.6.0.min.js"></script>
//         <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
//         <script src="../../assets/js/sweetalert.min.js"></script>
//         `;
//     }
// }

customElements.define('nav-bar', Navbar);
customElements.define('css-plugins', Cssplugins);
//customElements.define('js-plugins', Jsplugins);
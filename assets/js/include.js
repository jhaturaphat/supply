class Navbar extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
                 
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top fixed-top">
                <a class="navbar-brand" href="#">ระบบเบิกเซทและอุปกรณ์จ่ายกลาง</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/fontend/index.html"> <i class='bi bi-cart-check-fill'></i> ส่งใบเบิก <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/fontend/ward/order.html"> <i class='bi bi-clock-history'></i> ประวัติการเบิก <span class="sr-only">(current)</span></a>
                        </li>                        
                    </ul>
                </div>
            </nav>
        
        `;
    }
}

class NavbarBackend extends HTMLElement {
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


customElements.define('nav-bar', Navbar);
customElements.define('nav-bar-backend', NavbarBackend);
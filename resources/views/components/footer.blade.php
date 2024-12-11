<footer class="bg-light mt-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Restaurante</h5>
                <p>Ofreciendo la mejor experiencia culinaria desde 2023.</p>
            </div>
            <div class="col-md-4">
                <h5>Enlaces Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('menu') }}">Carta</a></li>
                    <li><a href="{{ route('reserva') }}">Reservas</a></li>
                    <li><a href="{{ route('delivery') }}">Delivery</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contacto</h5>
                <address>
                    123 Calle Principal<br>
                    Ciudad, País<br>
                    <abbr title="Teléfono">T:</abbr> (123) 456-7890
                </address>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p>&copy; 2023 Restaurante. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
<div class="container">
    <div class="card">
        <div class="col">
            <form action="{{url('/Usuario')}}" method="post">
                @csrf
                        
                <label for="">Nombre</label>
                <input type="text" name="nombre"><br>
                <label for="">Correo</label>
                <input type="text" name="correo"><br>
                <button type="submit">Enviar Datos</button>

            </form>
        </div>
    </div>
</div>
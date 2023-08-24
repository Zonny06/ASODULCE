<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta</title>
</head>

<body>
    <h1>Encuesta de satisfacción</h1>
    <p>Por favor, responde a las siguientes preguntas sobre tu experiencia con nuestros productos.</p>
    <form action="/encuesta" method="post">
        @csrf
        <div class="form-group">
            <label for="pregunta1">¿Qué te ha parecido la tapilla de 460g?</label>
            <select name="pregunta1" id="pregunta1" class="form-control">
                <option value="">Selecciona una opción</option>
                <option value="Muy buena">Muy buena</option>
                <option value="Buena">Buena</option>
                <option value="Regular">Regular</option>
                <option value="Mala">Mala</option>
                <option value="Muy mala">Muy mala</option>
            </select>
            @error('pregunta1')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="pregunta2">¿Qué te ha parecido la tapa de 950?</label>
            <select name="pregunta2" id="pregunta2" class="form-control">
                <option value="">Selecciona una opción</option>
                <option value="muybuena">muybuena</option>
                <option value="buena">buena</option>
                <option value="mala">mala</option>
            </select>
            @error('pregunta2')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="pregunta3">¿Qué te ha parecido la tapa pochote?</label>
            <select name="pregunta3" id="pregunta3" class="form-control">
                <option value="">Selecciona una opción</option>
                <option value="muybuena">muybuena</option>
                <option value="buena">buena</option>
                <option value="mala">mala</option>
            </select>
            @error('pregunta3')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="pregunta4">¿Qué te ha parecido el atado pochote?</label>
            <select name="pregunta4" id="pregunta4" class="form-control">
                <option value="">Selecciona una opción</option>
                <option value="muybuena">muybuena</option>
                <option value="buena">buena</option>
                <option value="mala">mala</option>
            </select>
            @error('pregunta4')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="pregunta5">¿Recomendarías nuestros productos?</label>
            <select name="pregunta5" id="pregunta5" class="form-control">
                <option value="">Selecciona una opción</option>
                <option value="Sí, definitivamente">Sí, definitivamente</option>
                <option value="Sí, probablemente">Sí, probablemente</option>
                <option value="No estoy seguro/a">No estoy seguro/a</option>
                <option value="No, probablemente no">No, probablemente no</option>
                <option value="No, definitivamente no">No, definitivamente no</option>
            </select>
            @error('pregunta5')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Enviar encuesta</button>
    </form>

</body>

</html>

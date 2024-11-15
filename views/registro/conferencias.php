
<h2 class="pagina__heading"><?php echo $titulo; ?></h2>
<p class="pagina__descripcion">Elige hasta 5 eventos para asistir de forma presencial.</p>

<div class="eventos-registro">
    <main class="eventos-registro__listado">
        <h3 class="eventos-registro__heading--conferencias">&lt;Conferencias /></h3>
        <p class="eventos-registro__fecha">Lunes 13 de enero</p>

        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_l'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Martes 14 de enero</p>
        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_m'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Miércoles 15 de enero</p>
        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_mi'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Jueves 16 de enero</p>
        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_j'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <h3 class="eventos-registro__heading--workshops">&lt;Talleres /></h3>
        <p class="eventos-registro__fecha">Lunes 13 de enero</p>

        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['talleres_l'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Martes 14 de enero</p>
        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['talleres_m'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Miércoles 15 de enero</p>
        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['talleres_mi'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Jueves 16 de enero</p>
        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['talleres_j'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

    </main>

    <aside class="registro">
        <h2 class="registro__heading">Tu Registro</h2>

        <div id="registro-resumen" class="registro__resumen"></div>

        <div class="registro__regalo">
            <label for="regalo" class="registro__label">Selecciona un regalo</label>
            <select id="regalo" class="registro__select">
                <option value="">-- Selecciona tu regalo --</option>
                <?php foreach($regalos as $regalo) { ?>
                    <option value="<?php echo $regalo->id; ?>"><?php echo $regalo->nombre; ?></option>
                <?php } ?>
            </select>
        </div>

        <form id="registro" class="formulario">
            <div class="formulario__campo">
                <input type="submit" class="formulario__submit formulario__submit--full" value="Registrarme">
            </div>
        </form>
    </aside>
</div>
  
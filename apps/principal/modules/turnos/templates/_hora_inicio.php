<?php use_helper('DateForm') ?>

<?php echo select_time_tag("turnos[hora_inicio]", $turnos->getHoraInicio(), array('include_second' => false, '12hour_time' => true));?>
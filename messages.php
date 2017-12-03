<?php namespace pg_control_pi; ?>
<?php
global $lang1;

// default english // control_pi
$templ['shutdown_system'] = "Shutdown System";
$templ['confirm_shutdown'] = "Are you sure you want to shut down?";
$templ['restart_system'] = "Restart System";
$templ['confirm_restart'] = "Are you sure you want to restart?";
$templ['shutdown_blurb'] = "<p>Shutting down here is safer for the SD/HD than simply unplugging the power.</p>\n"
   . "<p>If you shut down (as opposed to restart), you will need to unplug your system and plug it back in to restart.</p>\n";
$templ['shutdown_ok'] = "The server is shutting down now.";
$templ['restart_ok'] = "The server is restarting down now.";
$templ['shutdown_failed'] = "Unable to shutdown server.";
$templ['restart_failed'] = "Unable to restart server.";
$templ['current_date'] = "Date on RACHEL:";
$templ['date_blurb'] = "<p>If an internet connection does not exist, the date must be manually set.</p><p>Use this button to set the server date from the date on your machine.</p>";
$templ['setPiDate'] = "Set date from Client";
$templ['setPiDate_ok'] = "Date set.";
$templ['setPiDate_failed'] = "Date set failed.";
$templ["goto_admin"] = "Goto Admin";
$templ["disk_space_avail"] = "Available disk space";
$templ["no_space_for_new"] = "Insufficient disk space to create new module.";
$templ["just_image"] = "Image";
$templ["just_title"] = "Title";
$templ["just_description"] = "Description";
$templ["large_file"] = "is too large";
$templ["fix_errors"] = "Please fix the following errors";
$templ["required"] = "is required";
$templ["special_chars"] = "Please eliminate the special characters";
$templ["allowed_chars_title"] = "Only alphamumeric characters, underscores, and dashes are allowed in the title";
$templ["no_upload_space"] = "There is not sufficient disk space to upload this image";
$templ["upload_your_content"] = "Upload your content!";
$templ["file_to_upload"] = "File to upload";
$templ["select"] = "Select";
$templ["content_type"] = "Content type";
$templ["upload"] = "Upload";
$templ["delete"] = "Delete";
$templ["error"] = "Error";
$templ["preview"] = "Preview";
$templ["save"] = "Save";
$templ["new"] = "New";
$templ["optional"] = "Optional";
$templ["finished"] = "Finished";
$templ["saved"] = "Saved!";
$templ["are_you_sure"] = "Are you sure?";
$templ["delete_element"] = "Delete Element";

// override with language translations when available
// This allows for partial translations to exists
switch ($lang1) {
	case ("es"):
		// shutdown
		$templ['shutdown_system'] = "Apagar el Sistema";
		$templ['confirm_shutdown'] = "¿Seguro que desea cerrar?";
		$templ['restart_system'] = "Reiniciar el Sistema";
		$templ['confirm_restart'] = "¿Seguro que desea reiniciar?";
		$templ['shutdown_blurb'] = "<p>El cierre de aquí es más seguro para el SD / HD que simplemente desconectar la fuente.</p>\n"
    						. "<p>Si se cierra (en oposición a reiniciar), que tendrá que desconectar el sistema y vuelva a conectarlo para reiniciar.</p>\n";
		$templ['shutdown_ok'] = "El servidor está cerrando ahora.";
		$templ['restart_ok'] = "El servidor está reiniciando ahora.";
		$templ['shutdown_failed'] = "No se puede cerrar el servidor.";
		$templ['restart_failed'] = "No es posible reiniciar el servidor.";
                // setPiDate
                $templ['current_date'] = "La fecha de RACHEL:";
                $templ['date_blurb'] = "Si no existe una conexión a Internet, la fecha debe ajustarse manualmente. </p><p>Utilice este botón para ajustar la fecha del servidor desde la fecha de su máquina.</p>\n";
                $templ['setPiDate'] = "Establecer la fecha";
                $templ['setPiDate_ok'] = "Hecho con exito.";
                $templ['setPiDate_failed'] = "No hecho con exito.";
		$templ["goto_admin"] = "Ir a Admin";
		$templ["no_space_for_new"] = "Insuficiente espacio en disco para crear.";
		$templ["fix_errors"] = "Arreglar los siguientes errores";
		$templ["required"] = "es requerido";
		$templ["special_chars"] = "Por favor, elimina los caracteres especiales"; 
		$templ["allowed_chars_title"] = "Sólo caracteres alfanuméricos, _ y - están permitidos en el Título";
		$templ["no_upload_space"] = "No hay suficiente espacio en el disco para cargar";
		$templ["upload_your_content"] = "¡Carga su contenido!";
		$templ["file_to_upload"] = "Archivo para cargar";
		$templ["select"] = "Seleccione";
		$templ["content_type"] = "Tipo de contenido";
		$templ["upload"] = "Cargar";
		$templ["delete"] = "Borrar";
		$templ["error"] = "Error";
		$templ["preview"] = "Preestreno";
		$templ["save"] = "Guardar";
		$templ["new"] = "Nuevo";
		$templ["optional"] = "Opcional";
		$templ["finished"] = "Acabado";
		$templ["saved"] = "¡Se guardó!";
		$templ["are_you_sure"] = "¿Seguro?";
		$templ["title_uri_required"] = "Título y Enlace necesitan valores";
		$templ["delete_element"] = "Borrar Elemento";
		break;
	// can support additional languages via extra cases 
}

?>

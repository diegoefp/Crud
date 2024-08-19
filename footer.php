


	</div>

<footer>
	<div class="container">
		Loop Cursos Todos os direitos Reservados - 2024 ©️
	</div>
	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js" type="text/javascript"></script>

	<script src="//cdn.datatables.net/plug-ins/2.0.8/i18n/pt-BR.json" type="text/javascript"></script>

	<script>
		$(document).ready( function () {
    		$('#cursos').DataTable();
    		$('#alunos').DataTable();
    		$('#matriculas').DataTable();
		} );

	</script>

	<script type="text/javascript">
		var table = new DataTable('#cursos', {
    language: {
        url: '//cdn.datatables.net/plug-ins/2.0.8/i18n/pt-BR.json',
    },
});
	</script>
	<script type="text/javascript">
		var table = new DataTable('#alunos', {
    language: {
        url: '//cdn.datatables.net/plug-ins/2.0.8/i18n/pt-BR.json',
    },
});
	</script>
	<script type="text/javascript">
		var table = new DataTable('#matriculas', {
    language: {
        url: '//cdn.datatables.net/plug-ins/2.0.8/i18n/pt-BR.json',
    },
});
	</script>

</footer>



</body>
</html>
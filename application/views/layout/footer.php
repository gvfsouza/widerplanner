<!-- Footer -->
<style>
    footer {
        bottom: 0;
        width: 100%;
    }
</style>

<!-- <br><br>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-1 mt-1 mb-2 text-muted">
            <span>Sistema desenvolvido para cunho estudantil.</span>
        </div>
        <div class="copyright text-center my-1 mt-1 mb-2 text-muted">
            <span>Projeto de Conclusão de Curso - Superior de Tecnologia em Análise e Deselvolvimento de Sistemas</span>
        </div>
        <div class="copyright text-center my-1 mt-1 mb-2 text-muted">
            <span>Centro Universitário Nossa Senhora do Patrocínio</span>
        </div>
        <div class="copyright text-center my-1 mt-1 mb-2 text-muted">
            <span>Endereço: R. José Weissohn, 153 - Centro, Salto - SP, 13328-300</span>
        </div>
    </div>
</footer> -->
<script>
    // Função para mostrar o modal ao clicar no link de logout
    function showLogoutModal() {
        $("#logoutModal").modal("show");
    }

    // Limpar o modal ao fechar
    $('#logoutModal').on('hidden.bs.modal', function () {
        $(this).find('form')[0].reset();
    });
</script>


</body>
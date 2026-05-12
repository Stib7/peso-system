<?php
// ============================================================
//  PESO SYSTEM — Admin Footer
//  File: /admin/includes/footer.php
// ============================================================
?>

</div><!-- /#main-content -->

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Auto-dismiss alerts after 4 seconds
    document.querySelectorAll('.alert.auto-dismiss').forEach(function(el) {
        setTimeout(function() {
            el.classList.remove('show');
            el.classList.add('fade');
            setTimeout(() => el.remove(), 300);
        }, 4000);
    });

    // Confirm before delete actions
    document.querySelectorAll('[data-confirm]').forEach(function(el) {
        el.addEventListener('click', function(e) {
            if (!confirm(this.dataset.confirm || 'Are you sure?')) {
                e.preventDefault();
            }
        });
    });
</script>

</body>
</html>

    </main>
    <footer class="site-footer" id="download">
        <div class="container footer-grid">
            <div>
                <img class="footer-logo" src="<?= htmlspecialchars($site['logo_path'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?>">
                <p><?= htmlspecialchars(t('footer.description'), ENT_QUOTES, 'UTF-8') ?></p>
                <p><a class="text-link" href="<?= htmlspecialchars(page_url('privacy-policy.php'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t('footer.privacy'), ENT_QUOTES, 'UTF-8') ?></a></p>
            </div>
            <div class="footer-cta">
                <p><?= htmlspecialchars(t('footer.cta'), ENT_QUOTES, 'UTF-8') ?></p>
                <a class="button" href="<?= htmlspecialchars($site['play_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer"><?= htmlspecialchars(t('footer.cta_button'), ENT_QUOTES, 'UTF-8') ?></a>
            </div>
        </div>
        <div class="container footer-data-removal">
            <div class="footer-data-removal-card">
                <div class="footer-data-removal-copy">
                    <h3><?= htmlspecialchars(t('footer.data_delete_title'), ENT_QUOTES, 'UTF-8') ?></h3>
                    <p><?= htmlspecialchars(t('footer.data_delete_text'), ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <a class="button" href="mailto:marcusfreitasantos+listeasyapp@gmail.com"><?= htmlspecialchars(t('footer.data_delete_button'), ENT_QUOTES, 'UTF-8') ?></a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>

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
    </footer>
</div>
</body>
</html>

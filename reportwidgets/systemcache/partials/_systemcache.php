<div id="appcache" class="report-widget">
    <h3><?= e($this->property('title')) ?></h3>

    <?php if (!isset($error)): ?>
        <div
            class="control-chart centered"
            data-control="chart-pie"
            data-size="<?= $diameter ?>"
            data-center-text="<?= $size['all_cache'] ?>"
        >
            <ul>
                <li>cms/cache <span><?= $size['cms'] ?></span></li>
                <li>cms/combiner <span><?= $size['combiner'] ?></span></li>
                <li>cms/twig <span><?= $size['twig'] ?></span></li>
                <li>framework/cache <span><?= $size['framework'] ?></span></li>
            </ul>

            <button
                type="button"
                class="btn btn-default wn-icon-trash"
                style="margin-top: 19px"
                data-request="<?= $this->getEventHandler('onClear') ?>"
                data-request-success="$('#appcache').replaceWith(data.partial)"
                data-request-confirm="<?= e(trans('webvpf.dashboardwidgets::lang.cacheinfo.request_confirm')) ?>"
            >
                <?= e(trans('webvpf.dashboardwidgets::lang.cacheinfo.btn_clear')) ?>
            </button>
        </div>
    <?php else: ?>
        <p class="flash-message static warning"><?= e($error) ?></p>
    <?php endif ?>
</div>

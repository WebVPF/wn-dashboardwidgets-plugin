<div id="appcache" class="report-widget">
    <h3><?= e($this->property('title')) ?></h3>

    <?php if (!isset($error)): ?>
        <div
            class="control-chart centered"
            data-control="chart-pie"
            data-size="<?= $diameter ?>"
            data-center-text="<?= $size[1]['all_cache'] ?>"
        >
            <ul>
                <li>cms/cache <span><bytes class="hide"><?= $size[0]['cms'] ?></bytes>&nbsp;<?= $size[1]['cms'] ?></span></li>
                <li>cms/combiner <span><bytes class="hide"><?= $size[0]['combiner'] ?></bytes>&nbsp;<?= $size[1]['combiner'] ?></span></li>
                <li>cms/twig <span><bytes class="hide"><?= $size[0]['twig'] ?></bytes>&nbsp;<?= $size[1]['twig'] ?></span></li>
                <li>framework/cache <span><bytes class="hide"><?= $size[0]['framework'] ?></bytes>&nbsp;<?= $size[1]['framework'] ?></span></li>
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

<?php
return array (
  1 => '{$categorydir}{$catdir}/index.html|{$categorydir}{$catdir}/{$page}.html',
  6 => 'index.admin?m=content&c=index&a=lists&catid={$catid}|index.admin?m=content&c=index&a=lists&catid={$catid}&page={$page}',
  11 => '{$year}/{$catdir}_{$month}{$day}/{$id}.html|{$year}/{$catdir}_{$month}{$day}/{$id}_{$page}.html',
  12 => '{$categorydir}{$catdir}/{$year}/{$month}{$day}/{$id}.html|{$categorydir}{$catdir}/{$year}/{$month}{$day}/{$id}_{$page}.html',
  16 => 'index.admin?m=content&c=index&a=show&catid={$catid}&id={$id}|index.admin?m=content&c=index&a=show&catid={$catid}&id={$id}&page={$page}',
  17 => 'show-{$catid}-{$id}-{$page}.html',
  18 => 'content-{$catid}-{$id}-{$page}.html',
  30 => 'list-{$catid}-{$page}.html',
);
?>
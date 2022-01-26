# TYPO3 Extension `routing_with_not_found_records`

This extension makes it possible to use the `PersistedAliasMapper` and missing records.
A typical use case is eg. *EXT:news* with a news record. If the record is being hidden, deleted or start/endtime are reached, the extension can now again handle that instead of triggering a page not found error.

## Usage

1. Install with `composer req georgringer/routing-with-not-found-records`.
2. Replace `PersistedAliasMapper` with `PersistedAliasMapperWithNotFoundRecords` in your routing config.

Full example

```yaml
routeEnhancers:
  News:
    type: Extbase
    extension: News
    plugin: Pi1
    routes:
      - routePath: '/{news-title}'
        _controller: 'News::detail'
        _arguments:
          news-title: news
    aspects:
      news-title:
        type: PersistedAliasMapperWithNotFoundRecords
        tableName: tx_news_domain_model_news
        routeFieldName: path_segment
```

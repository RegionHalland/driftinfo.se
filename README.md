# Instruktioner för driftinfo.regionhalland.se


## Hämta hem webbplatsen via Git

```sh
git clone https://github.com/RegionHalland/driftinfo.se.git
```


## Ställ om till rätt version på servern

```sh
git checkout v1.0.0
```


## Plugins från wpackagist

```sh
"wpackagist-plugin/mce-table-buttons":"3.3",
"wpackagist-plugin/classic-editor":"1.5",
"wpackagist-plugin/disable-gutenberg": "1.8.1",
"wpackagist-plugin/admin-menu-editor": "1.8.5",
"wpackagist-plugin/wp-migrate-db": "1.0.10",
```


## Egna region-halland-plugins

```sh
"regionhalland/region-halland-mobile-detect": "1.3.0",
"regionhalland/region-halland-acf-add-theme-subpage": "1.3.2",
"regionhalland/region-halland-acf-cookie-notice": "1.3.2",
"regionhalland/region-halland-array-pagination": "1.3.0",
"regionhalland/region-halland-acf-drift-info": "2.7.1"
```


## Versionhistorik

### 1.2.0
- Flyttat repo till Azure Devops

### 1.1.0
- Justering av tillgänglighet, dvs nästling, kontrast, attribut m.m.
- Release av sitespecifik css, dvs "driftinfo.1.3.0-5.1.0.css"

### 1.0.0
- Release av nya driftinfo.regionhalland.se
# tainux.io

[![License](https://img.shields.io/badge/License-Apache%202.0-red.svg)](LICENSE)

Source of the [tainux.io](https://tainux.io) website.

Built with PHP / HTML / CSS following the Red Hat Design System.  
Hosted on Hostgator — deployed via FTP/rsync.

---

## Structure

```
tainux-io/
├── index.php          Main website
├── kubernetes.php     Kubernetes docs page
├── charts.php         Helm Charts page (charts.tainux.io)
├── public/
│   └── images/        Logo, favicons, assets
└── .github/
    └── workflows/
        └── deploy.yml Deploy to Hostgator on push to main
```

## License

Apache 2.0 — [TAINUX Software](https://tainux.io)

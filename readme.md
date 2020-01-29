## how to use

### setup
- Docker-for-Mac


```bash
git clone git@github.com:bocci-nagasaki/corporate.git
make docker/setup
```

### start/stop

```bash
make docker/up
make docker/down
```

access to `http://localhost:8080` .

### export plugin list

```bash
make plugin/export
```

### import plugin list

```bash
make plugin/import
```

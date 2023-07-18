name: "CodeQL"

on:
  push:
    branches: [master]
  pull_request:
    # The branches below must be a subset of the branches above
    branches: [master]
  schedule:
    - cron: '0 7 * * 1'

jobs:
  analyze:
    name: Analyze
    runs-on: ubuntu-latest

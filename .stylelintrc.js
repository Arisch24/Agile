module.exports = {
    extends: "@wordpress/stylelint-config/scss",
    rules: {
        "selector-class-pattern": null,
        "rule-empty-line-before": null,
        "at-rule-empty-line-before": null,
        "scss/no-global-function-names": null,
        "max-line-length": 120,
        "function-comma-space-after": "always-single-line",
        "function-parentheses-space-inside": "never-single-line",
    },
    ignoreFiles: [
        "node_modules/**",
        "build/**",
        "dist/**",
        "vendor/**",
        "public/**",
        "assets/**",
    ],
}

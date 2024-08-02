module.exports = {
	env: {
		browser: true,
		commonjs: true,
		es6: true,
		node: true
	},
	extends: [ 'wordpress' ],
	parserOptions: {
		sourceType: 'module'
	},
	rules: {
		'array-bracket-spacing': [ 'error' ],
		'no-unused-vars': 'warn',
		'no-warning-comments': 0,
		indent: [ 'error', 'tab' ],
		semi: [ 'error', 'always' ],
		quotes: [ 'error', 'single' ],
		'linebreak-style': [ 'error', 'unix' ],
		yoda: [ 'error', 'never' ]
	}
};

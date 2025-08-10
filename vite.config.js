import { defineConfig } from 'vite';
import * as glob from 'glob';
import path from 'path';
import fs from 'fs';
import autoprefixer from 'autoprefixer';
import dotenv from 'dotenv';

// Load environment variables from .env file
dotenv.config();

// Replace this line if you are using a custom theme ex: const themeName = 'theme-folder-name';
const themeName = process.env.THEME_NAME;

if (!themeName) {
	throw new Error("THEME_NAME is not defined in the .env file.");
}

const themePath = `web/app/themes/${themeName}`;

// Collect all JS files
const jsFiles = glob.sync(`${themePath}/src/js/**/*.js`);

// Collect all SCSS files, filtering out empty ones
const scssFiles = glob
	.sync(`${themePath}/src/scss/**/*.scss`, { ignore: '**/_*.scss' })
	.filter((file) => fs.statSync(file).size > 0); // Only include non-empty files

if (jsFiles.length === 0 && scssFiles.length === 0) {
	console.log('No source files to compile.');
	process.exit(0);
}

export default defineConfig(({ command }) => ({
	root: path.resolve(__dirname, themePath, 'src'),
	build: {
		outDir: path.resolve(__dirname, themePath, 'assets'),
		emptyOutDir: false,
		rollupOptions: {
			input: [
				...jsFiles.map((file) => path.resolve(file)),
				...scssFiles.map((file) => path.resolve(file)),
			],
			output: {
				entryFileNames: ({ facadeModuleId }) => {
					const regex = /js\/([^\/]+)\/[^\/]+\.js$/;
					const match = facadeModuleId.match(regex);

					if (match && match[1]) {
						return `js/${match[1]}/[name].js`;
					}

					return 'js/[name].js';
				},
				assetFileNames: ({ names, originalFileNames }) => {
					if (names[0].endsWith('.css') && originalFileNames[0] !== undefined) {
						const regex = /scss\/([^\/]+)\/[^\/]+\.scss$/;
						const match = originalFileNames[0].match(regex);

						if (match && match[1]) {
							return `css/${match[1]}/[name].css`;
						}

						return 'css/[name].css';
					} else if (/\.(png|jpe?g|gif)$/i.test(names[0])) {
						return 'images/[name].[ext]';
					}

					return `[name].[ext]`;
				},
			},
		},
	},
	resolve: {
		alias: {
			'@': path.resolve(__dirname, 'src/*'),
		},
	},
	css: {
		postcss: {
			plugins: [
				require('postcss-url')(),
				require('postcss-nested')(),
				autoprefixer(),
				require('postcss-sort-media-queries')({
					sort: 'mobile-first',
				}),
			],
		},
	},
}));
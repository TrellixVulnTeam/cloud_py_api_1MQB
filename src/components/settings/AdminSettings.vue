<!--
 - @copyright Copyright (c) 2021 Andrey Borysenko <andrey18106x@gmail.com>
 -
 - @copyright Copyright (c) 2021 Alexander Piskun <bigcat88@icloud.com>
 -
 - @author Andrey Borysenko <andrey18106x@gmail.com>
 -
 - @license AGPL-3.0-or-later
 -
 - This program is free software: you can redistribute it and/or modify
 - it under the terms of the GNU Affero General Public License as
 - published by the Free Software Foundation, either version 3 of the
 - License, or (at your option) any later version.
 -
 - This program is distributed in the hope that it will be useful,
 - but WITHOUT ANY WARRANTY; without even the implied warranty of
 - MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 - GNU Affero General Public License for more details.
 -
 - You should have received a copy of the GNU Affero General Public License
 - along with this program. If not, see <http://www.gnu.org/licenses/>.
 -
 -->

<template>
	<div class="admin-settings">
		<h2>{{ t('cloud_py_api', 'Cloud Python API (Framework)') }}</h2>
		<p>
			Apps configuration available
			<a :href="getRegisteredAppUrl()" style="text-decoration: underline;">here</a>
		</p>
		<div v-if="settings.length > 0">
			<h3>Settings</h3>
			<p v-for="setting of settings" :key="setting.id" style="border-top: 1px solid #eee; border-bottom: 1px solid #eee; padding: 10px 0;">
				Name: <b>{{ setting.name }}</b><br>
				Value: {{ setting.value }}<br>
				Display name: {{ setting.display_name }}<br>
				Title: {{ setting.title }}<br>
				Description: {{ setting.description }}<br>
				Help url: Read <a style="text-decoration: underline" :href="setting.help_url">the docs</a>
			</p>
		</div>
		<div class="py_frm_init">
			<button v-if="!pyFrmInitLoading" class="check_frm_init_btn" @click="checkPyFrmInit">
				Check Python Framework installation
			</button>
			<button v-else class="check_frm_init_btn" disabled>
				<span class="icon-loading" />
			</button>
			<div v-if="pyFrmInit" class="py_frm_init_output">
				{{ pyFrmInit }}
			</div>
		</div>
		<BugReport />
	</div>
</template>

<script>
import axios from '@nextcloud/axios'
import { generateUrl } from '@nextcloud/router'
import { mapGetters } from 'vuex'

import BugReport from './BugReport'

export default {
	name: 'AdminSettings',
	components: { BugReport },
	data() {
		return {
			pyFrmInitLoading: false,
			pyFrmInit: null,
			apps: [],
		}
	},
	computed: {
		...mapGetters([
			'settings',
		]),
	},
	beforeMount() {
		this.getSettings()
		this.getApps()
	},
	methods: {
		getSettings() {
			axios.get(generateUrl('/apps/cloud_py_api/api/v1/settings')).then(res => {
				this.$store.dispatch('setSettings', res.data)
			})
		},
		getApps() {
			axios.get(generateUrl('/apps/cloud_py_api/api/v1/apps')).then(res => {
				this.apps = res.data
			})
		},
		checkPyFrmInit() {
			this.pyFrmInitLoading = true
			axios.get(generateUrl('/apps/cloud_py_api/api/v1/python/check_frm_init')).then(res => {
				this.pyFrmInit = res.data
				this.pyFrmInitLoading = false
			}).catch(err => {
				console.debug(err)
				this.pyFrmInitLoading = false
			})
		},
		getAppUrl(appId) {
			return generateUrl(`/apps/cloud_py_api/apps/${appId}`)
		},
		getRegisteredAppUrl() {
			return generateUrl('/apps/cloud_py_api')
		},
	},
}
</script>

<style scoped>
.admin-settings {
	margin: 20px;
}

.check_frm_init_btn {
	margin: 20px 0;
}

.py_frm_init_output {
	border: 1px solid #eee;
	border-radius: 5px;
	padding: 10px 15px;
	margin: 10px 0;
}

.apps-list {
	display: flex;
	flex-direction: column;
	border: 1px solid #eee;
	border-radius: 5px;
	padding: 10px 15px;
	margin: 10px 0;
}

.apps-list h3 {
	margin: 0;
}
</style>

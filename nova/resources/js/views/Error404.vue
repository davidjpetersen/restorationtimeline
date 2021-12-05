<template>
  <div
    class="fixed pin bg-40 z-50 flex items-center justify-center min-w-site p-6"
  >
    <div class="flex items-center w-error">
      <div class="flex-no-shrink illustration">
        <img :src="southPark" />
      </div>

      <div>
        <h1 class="text-error-title font-normal mb-1">404</h1>
        <p class="text-error-subtitle mb-6">{{ __('Whoops') }}&hellip;</p>
        <p class="text-error-message mb-8 leading-normal">
          {{
            __(
              "We're lost in space. The page you were trying to view does not exist."
            )
          }}
        </p>
        <router-link
          :to="{ name: 'dashboard' }"
          class="
            dim
            btn btn-lg btn-default btn-white
            text-90
            no-text-shadow
            tracking-wide
            uppercase
          "
        >
          {{ __('Go Home') }}
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
import southPark from '@/resources/images/joseph_smith_hat_south_park.jpeg';
export default {
  metaInfo() {
    return {
      title: 'Page Not Found',
      southPark
    }
  },
}
</script>

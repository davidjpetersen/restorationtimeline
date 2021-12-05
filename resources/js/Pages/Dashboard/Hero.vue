<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div class="pt-6 pb-20">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto pt-16 px-4 sm:pt-24 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p
                        class="
                            mt-1
                            text-4xl
                            font-extrabold
                            text-gray-900
                            sm:text-5xl sm:tracking-tight
                            lg:text-6xl
                        "
                    >
                        {{ getHeadline() }}
                    </p>
                    <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                        {{ getSubHeader() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Hero",
    data() {
        return {
            headline: [
                "What have you missed",
                "Dig into the history of the Restoration.",
                "Explore the Restoration.",
                "It's time to go deeper.",
                "Discover the history you never knew.",
                "Explore the full story of Mormonism.",
                // "History that church leaders won't tell you.",
                // "History you won't get in Sunday School",
                // "Restore the truth.",
            ],
            subheader: [
                "A comprehensive, interactive, and cross-referenced timeline of Latter-day Saint History.",
                "See the best research, compare sources, and get the truth with Restoration Timeline. We've organized all the history resources so you can see how one event has been reported by different sources and understand why there's a difference.", // "The Church of Jesus Christ of Latter-day Saints has tried to hide this for decades - but now it's finally available in an easy-to-use, interactive timeline format that includes events, revelations, quotes, and references.",
                // "The Church of Jesus Christ of Latter-day Saints has tried to hide this for decades - but now it's finally available in an easy-to-use, interactive timeline format that includes events, revelations, quotes, and references.",
            ],
        };
    },
    methods: {
        getHeadline() {
            return this.headline[
                Math.floor(Math.random() * this.headline.length)
            ];
        },
        getSubHeader() {
            return this.subheader[
                Math.floor(Math.random() * this.subheader.length)
            ];
        },
    },
};
</script>

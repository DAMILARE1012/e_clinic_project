<template>
    <div>
        <div v-for="(message, index) in messages" :key="index">
            <message-item :message="message"/>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: ['messages'],
}
</script>
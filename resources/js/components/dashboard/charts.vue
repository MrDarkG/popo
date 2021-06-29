<template>
    <div class="card card-stretch mb-5 mb-xxl-8">
        <div class="card-header align-items-center border-0 mt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="fw-bolder text-dark fs-3">შედეგები</span>
            </h3>
        </div>
        <div class="card-body pt-0">
            <div class="d-flex flex-wrap flex-xxl-nowrap justify-content-center justify-content-md-start pt-4">
                <div class="me-sm-10 me-0">
                    <ul class="nav flex-column nav-pills nav-pills-custom">
                            <li class="nav-item mb-3" v-for="(cat,index) in cats" >
                                <a :class="`nav-link ${index==0?'active':''}  w-225px h-70px`" data-bs-toggle="pill" id="kt_stats_widget_2_tab_" href="#kt_stats_widget_2_tab__content" @click="active=cat.id">
                                    <div class="nav-icon me-3">
                                        <img alt="asd" :src="cat.courses.categories.icons" class="default" />
                                        <img alt="asd" :src="cat.courses.categories.icons" class="active" />
                                    </div>
                                    <div class="ps-1">
                                        <span class="nav-text text-gray-600 fw-bolder fs-6">
                                            {{ cat.courses.title }}
                                        </span>
                                        <span class="text-muted fw-bold d-block pt-1">{{ cat.courses.categories.title }}</span>
                                    </div>
                                </a>
                            </li>
                    </ul>
                </div>
                <div class="tab-content flex-grow-0" style="width:400px;">
                    <custom-chart
                        :score="score"
                        :max_value="max_value"
                    >
                    </custom-chart>
                </div>
            </div>
        </div>
    </div>
</template>
<script >
    
    export default{

        props:["cats"],
        data(){
            return {
                active:0,
                max_value:100,
                score:0
            }
        },
        methods:{
            retriveScore(){
                axios.post("/get/my/score",{
                    course_id:this.active
                }).then((data)=>{
                    this.score=parseInt(data.data.myscore)
                    this.max_value=parseInt(data.data.max_score)
                })
            }

        },
        watch: {
            active: function (val) {
              this.retriveScore(val)
            }
        },
        mounted(){
            if (this.cats.length>0) {
                this.active=this.cats[0].id
            }
        }
    };
</script>
<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAppLog
 *
 * @ORM\Table(name="t_app_log", uniqueConstraints={@ORM\UniqueConstraint(name="uq_app_log_activity_id", columns={"activity_id"})}, indexes={@ORM\Index(name="ixfk_t_app_log_t_user", columns={"activity_user_id"})})
 * @ORM\Entity
 */
class TAppLog
{
    /**
     * @var string
     *
     * @ORM\Column(name="activity", type="string", length=128, nullable=true)
     */
    private $activity;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_desc", type="string", length=128, nullable=true)
     */
    private $activityDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_url", type="string", length=128, nullable=true)
     */
    private $activityUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=64, nullable=true)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=15, nullable=true)
     */
    private $ipAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="activity_time", type="datetime", nullable=false)
     */
    private $activityTime;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="string", length=255, nullable=true)
     */
    private $remark;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_id", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="t_app_log_activity_id_seq", allocationSize=1, initialValue=1)
     */
    private $activityId;

    /**
     * @var \AppBundle\Entity\TUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_user_id", referencedColumnName="id")
     * })
     */
    private $activityUser;



    /**
     * Set activity
     *
     * @param string $activity
     *
     * @return TAppLog
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set activityDesc
     *
     * @param string $activityDesc
     *
     * @return TAppLog
     */
    public function setActivityDesc($activityDesc)
    {
        $this->activityDesc = $activityDesc;

        return $this;
    }

    /**
     * Get activityDesc
     *
     * @return string
     */
    public function getActivityDesc()
    {
        return $this->activityDesc;
    }

    /**
     * Set activityUrl
     *
     * @param string $activityUrl
     *
     * @return TAppLog
     */
    public function setActivityUrl($activityUrl)
    {
        $this->activityUrl = $activityUrl;

        return $this;
    }

    /**
     * Get activityUrl
     *
     * @return string
     */
    public function getActivityUrl()
    {
        return $this->activityUrl;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return TAppLog
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return TAppLog
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set activityTime
     *
     * @param \DateTime $activityTime
     *
     * @return TAppLog
     */
    public function setActivityTime($activityTime)
    {
        $this->activityTime = $activityTime;

        return $this;
    }

    /**
     * Get activityTime
     *
     * @return \DateTime
     */
    public function getActivityTime()
    {
        return $this->activityTime;
    }

    /**
     * Set remark
     *
     * @param string $remark
     *
     * @return TAppLog
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Get activityId
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * Set activityUser
     *
     * @param \AppBundle\Entity\TUser $activityUser
     *
     * @return TAppLog
     */
    public function setActivityUser(\AppBundle\Entity\TUser $activityUser = null)
    {
        $this->activityUser = $activityUser;

        return $this;
    }

    /**
     * Get activityUser
     *
     * @return \AppBundle\Entity\TUser
     */
    public function getActivityUser()
    {
        return $this->activityUser;
    }
}
